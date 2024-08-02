// native js
const r = 4;

const area = (Math.PI * r ** 2).toFixed(2);
console.log('Area of circle: ', area);

const circumference = (2 * Math.PI * r).toFixed(2);
console.log('Circumference of circle: ', circumference);

// -------------oop js----------------

/** Just class `Circle` that defines a circle */
const Circle = {
  /** class with Public instance attribute: radius */
  radius: 4,

  /** Get the area of the circle
        Returns: the area of the circle */
  getArea: function () {
    return (Math.PI * this.radius ** 2).toFixed(2);
  },

  /** Get the circumference of the circle
        Returns: the circumference of the circle */
  getCircumference: function () {
    return (2 * Math.PI * this.radius).toFixed(2);
  }
};
console.log('Area of circle: ', Circle.getArea());
console.log('Circumference of circle: ', Circle.getCircumference());
