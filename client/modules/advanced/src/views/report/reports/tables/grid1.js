/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Advanced Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/advanced-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: b05a39a2254aff91765cddbd4982f2af
 ***********************************************************************************/

Espo.define('advanced:views/report/reports/tables/grid1', ['view', 'advanced:views/report/reports/tables/grid2'], function (Dep, Grid2) {

    return Dep.extend({

        STUB_KEY: '__STUB__',

        template: 'advanced:report/reports/tables/table',

        columnWidthPx: 130,

        setup: function () {
            this.column = this.options.column;
            this.result = this.options.result;
            this.reportHelper = this.options.reportHelper;
        },

        formatCellValue: function (value, column, isTotal) {
            return Grid2.prototype.formatCellValue.call(this, value, column, isTotal);
        },

        formatNumber: function (value, isCurrency) {
            return Grid2.prototype.formatNumber.call(this, value, isCurrency);
        },

        afterRender: function () {
            var result = this.result;

            var groupBy = this.result.groupBy[0];

            var noGroup = false;

            if (this.result.groupBy.length === 0) {
                noGroup = true;
                groupBy = this.STUB_KEY;
            }

            var columnCount = (this.result.columns.length + 1);
            var columnWidth;

            if (this.options.isLargeMode) {
                if (columnCount == 2) {
                    columnWidth = 22;
                } else if (columnCount == 3) {
                    columnWidth = 22;
                } else if (columnCount == 4) {
                    columnWidth = 20;
                } else {
                    columnWidth = 100 / columnCount;
                }
            } else {
                if (columnCount == 2) {
                    columnWidth = 35;
                } else if (columnCount == 3) {
                    columnWidth = 30;
                } else {
                    columnWidth = 100 / columnCount;
                }
            }

            var $table = $('<table style="table-layout: fixed;">').addClass('table table-no-overflow').addClass('table-bordered');

            var columnWidthPx = this.columnWidthPx;
            if (columnCount > 4) {
                var tableWidthPx = columnWidthPx * columnCount;
                $table.css('min-width', tableWidthPx  + 'px');
            }

            if (!this.options.hasChart || this.options.isLargeMode) {
                $table.addClass('no-margin');
                this.$el.addClass('no-bottom-margin');
            }
            var $tr = $('<tr class="accented">');

            if (!noGroup) {
                var $th = $('<th>');
                if (!~groupBy.indexOf(':') && this.result.isJoint) {
                    var columnData = this.reportHelper.getGroupFieldData(groupBy, this.result);
                    var columnString = null;
                    if (columnData.fieldType === 'link') {
                        var foreignEntityType = this.getMetadata().get(['entityDefs', columnData.entityType, 'links', columnData.field, 'entity']);
                        if (foreignEntityType) {
                            columnString = this.translate(foreignEntityType, 'scopeNames');
                        }
                    }
                    if (columnString) {
                        columnString = '<strong class="text-soft">' + columnString + '</strong>';
                        $th.html(columnString);
                        if (this.options.isLargeMode && noGroup && this.result.columns.length < 3) {
                            $th.css('font-size', '125%');
                        }
                    }
                }
                $tr.append($th);
            }

            this.result.columns.forEach(function (col) {
                var columnString = this.reportHelper.formatColumn(col, this.result);
                columnString = '<strong class="text-soft">' + columnString + '</strong>';
                var $th = $('<th width="'+columnWidth+'%">').html(columnString + '&nbsp;');
                $th.css('font-weight', 'bold');
                if (this.options.isLargeMode && noGroup && this.result.columns.length < 3) {
                    $th.css('font-size', '125%');
                }
                $tr.append($th);
            }, this);
            $table.append($tr);

            var reportData = this.options.reportData;

            this.result.grouping[0].forEach(function (gr) {
                var $tr = $('<tr>');
                var group1Title;

                if (!noGroup) {
                    groupTitle = this.reportHelper.formatGroup(groupBy, gr, this.result);
                    var html = groupTitle;
                    if (!this.result.isJoint) {
                        html = '<a href="javascript:" data-action="showSubReport" data-group-value="'+Handlebars.Utils.escapeExpression(gr)+'">' + html + '</a>&nbsp;';
                    }
                    $tr.append($('<td>').html(html));
                }

                this.result.columns.forEach(function (col) {
                    var value = null;
                    if (gr in result.reportData) {
                        value = result.reportData[gr][col];
                    }

                    var $td = $('<td>');
                    if (this.options.reportHelper.isColumnNumeric(col, this.result)) {
                        $td.attr('align', 'right');
                    }
                    if (noGroup) {
                        $td.css('font-weight', 'bold');
                        $td.addClass('text-soft');
                        if (this.options.isLargeMode) {
                            $td.css('font-size', '175%');
                        } else {
                            $td.css('font-size', '125%');
                        }
                    } else {
                        var columnString = this.reportHelper.formatColumn(col, this.result);
                        var title = this.unescapeString(groupTitle) + '\n' + this.unescapeString(columnString);
                        $td.attr('title', title);
                    }
                    $td.html(this.formatCellValue(value, col));
                    $tr.append($td);
                }, this);

                $table.append($tr);
            }, this);

            if (!noGroup) {
                var $tr = $('<tr class="accented">');
                var $totalText = $('<strong class="text-soft">' + this.translate('Total', 'labels', 'Report') + '</strong>');
                $tr.append($('<td>').html($totalText));
                if (this.options.isLargeMode) {
                    $totalText.css('vertical-align', 'middle');
                }
                this.result.columns.forEach(function (col) {
                    value = result.sums[col];
                    var cellValue = value;

                    var columnString = this.reportHelper.formatColumn(col, this.result);

                    if (this.options.reportHelper.isColumnNumeric(col, this.result)) {
                        value = value || 0;
                        cellValue = this.formatCellValue(value, col, true);
                    } else {
                        cellValue = '';
                    }
                    var $td = $('<td align="right">').html('<strong>' + cellValue + '</strong>' + '');
                    if (this.options.isLargeMode) {
                        $td.css('font-size', '125%');
                    }
                    var title = this.unescapeString(columnString);
                    $td.attr('title', title);
                    $tr.append($td);
                }, this);
                $table.append($tr);
            }

            this.$el.find('.table-container').append($table);

            if (columnCount > 4) {
                this.$el.find('.table-container').css('overflow-y', 'auto');
            }
        },

        unescapeString: function (value) {
            return $('<div>').html(value).text();
        },

    });
});
