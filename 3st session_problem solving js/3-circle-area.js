// native js
let r = 4;

let area = (Math.PI * r ** 2).toFixed(2);
console.log("Area of circle: ", area);

let circumference = (2 * Math.PI * r).toFixed(2);
console.log("Circumference of circle: ", circumference);

// oop js
let circle = {
    radius: 4,
    getArea: function () {
        return (Math.PI * this.radius ** 2).toFixed(2);
    },
    getCircumference: function () {
        return (2 * Math.PI * this.radius).toFixed(2);
    }
}
console.log("Area of circle: ", circle.getArea());
console.log("Circumference of circle: ", circle.getCircumference());
