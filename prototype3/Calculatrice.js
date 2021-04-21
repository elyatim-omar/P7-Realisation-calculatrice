// Métier
class CalculatriceBLO {

    constructor(x,y,solution,operation){
        this.x = x;
        this.y = y;
        this.solution = solution;
        this.operation = operation;
    }



    // Private attributes

    // #_x;
    // #_y;
    // #_solution;
    // #_operation;



    // Setters and getters

    // get x() {
    //   return this._x  
    // }
    // set x(value){
    //     this._x = value;
    // }
    // get y() {
    //     return this._y 
    // }
    // set y(value){
    //       this._y = value;
    // }
    // get y() {
    //     return this._y 
    // }
    // set y(value){
    //       this._y = value;
    // }
    // get operation() {
    //     return this._operation
    // }
    // set operation(value){
    //       this._operation = value;
    // }

    // get solution() {
    //     return this._solution
    // }

    // set solution(value){
    //       this._solution = value;
    // }

    Calculer(){

        this.solution = undefined;

        switch (this.operation) {

            case '+':
                this.solution = this.x + this.y;
                break;

            case '-':
                this.solution = this.x- this.y;
                    break;

            case 'x':
                 this.solution = this.x * this.y;
                     break;

            default:
            break;

        }
        return this.solution;
    }

    Init(){

        this.x = undefined;

        this.y = undefined;

        this.operation = undefined;
    }

  }