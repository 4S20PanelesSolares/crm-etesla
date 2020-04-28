Espo.define('custom:views/Opportunity/record/detail', 'views/record/detail', function (Dep) {

  return Dep.extend({
    template: 'custom:views/Opportunity/record/detail', 
    middleView: 'custom:views/Opportunity/record/detail-middle', 
    sideView: 'custom:views/Opportunity/record/detail-side',    
    bottomView: 'custom:views/Opportunity/record/detail-bottom', 

    setup: function () {
      Dep.prototype.setup.call(this);

      this.hideField('someField');
      this.showField('someField');

      this.listenTo(this.model, 'change:myField', function () {
        this.model.set('anotherField', this.model.get('myField') + ' Hello');

        this.hideField('someField');
        this.showField('someField');
        this.setFieldRequired('someField');
        this.setFieldNotRequired('someField');

        this.setFieldReadOnly('someField');
        this.setFieldNotReadOnly('someField');

        this.hidePanel('activities');
        this.showPanel('history');
      }, this);
    },

    afterRender: function () {
      Dep.prototype.afterRender.call(this);

      this.$el.find('label[data-name="myField"]').addClass('hidden');
    }
  });
});