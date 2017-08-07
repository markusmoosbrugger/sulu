This is a simple component which renders icons. It uses the [Font Awesome Icon Toolkit](http://fontawesome.io/).

Pass a name to the component, and it will render the corresponding icon:

```javascript
<Icon name="floppy-o" />
```

It can also take an additional `className`, which will be added to the class of the resulting `span` tag:

```javascript
<Icon name="trash-o" className="special-icon" />
```