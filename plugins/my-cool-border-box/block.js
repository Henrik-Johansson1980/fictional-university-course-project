wp.blocks.registerBlockType('henrik/border-box', {
  title: 'My Cool Border Box',
  icon: 'smiley',
  category: 'common',
  attributes: {
    content: {type: 'string'},
    color: {type: 'string'},
  },
  edit: (props) => {

    function updateContent(event) {
      props.setAttributes({content:event.target.value})
    }
    
    function updateColor(value) {
      props.setAttributes({color: value.hex})
    }

    return wp.element.createElement(
      "div", 
      null, 
      wp.element.createElement(
        "h3",
        {
          style: {border: `5px solid ${props.attributes.color}`}, 
        },
        props.attributes.content
      ),
      wp.element.createElement("input", {
          type: "text",
          onChange: updateContent,
          value: props.attributes.content
      }),
      wp.element.createElement(wp.components.ColorPicker, {
        onChangeComplete: updateColor,
        color: props.attributes.color
      }),
    );
  },
  save: (props) => {
    return wp.element.createElement("h3", {
      style: {
        border: `5px solid ${props.attributes.color}`
      }
    }, props.attributes.content);
  }
});