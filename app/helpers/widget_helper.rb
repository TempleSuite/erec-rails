module WidgetHelper
  def render_widget(name, buttons:{}, locals:{})
    data_hash = [
      'colorbutton',
      'editbutton',
      'togglebutton',
      'deletebutton',
      'fullscreenbutton',
      'custombutton',
      'collapsed',
      'sortable'
    ].map do |option|
      [
        "widget-#{option}=",
        buttons[option] == true ? 'true' : 'false' + "'"
      ]
    end.to_h

    render partial: "/widgets/#{name}", layout: '/widgets/jarviswidget', locals: {
      data_hash: data_hash,
      widget_name: name
    }.reverse_merge(locals)
  end
end
