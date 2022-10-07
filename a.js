class Student {
    id;
    name;
    gpa;

    constructor(id, name, gpa){
        this.id = id;
        this.name = name;
        this.gpa = parseInt(gpa);
    }

    getStudent() {
        return `${this.id}; ${this.name}; ${this.gpa}`
    }

    static topStudent(...arr){
        let highest = 0;
        let res_id;
        for(let i =0; i < arr.length; i++){
            if(arr[i].gpa > highest){
                highest = arr[i].gpa;
                res_id = arr[i].id;
            }
            console.log(arr[i].gpa);
        }
        return arr.filter((student) => student.id != res_id);
        
    }

}


let s1 = new Student(1, "Sultan", 2.74);
let s2 = new Student(2, "Aman", 2.81);
let s3 = new Student(3, "Aska", 1.3);
let s4 = new Student(4, "Aza", 1.9);
let s5 = new Student(5, "Adil", 3.57);

const arr = [s1, s2, s3, s4, s5];

for(let i =0; i < arr.length; i++){
    console.log(arr[i].getStudent());
}

console.log("----------");

arr.push(new Student(6, "Disa", 4.00));
arr.push(new Student(7, "Oskar", 2.69));
arr.push(new Student(8, "Rahima", 3.6));
arr.push(new Student(9, "Aliya", 3.9));
arr.push(new Student(10, "Indra", 3.1));

Student.topStudent(arr);

for(let i =0; i < arr.length; i++){
    console.log(arr[i].getStudent());
}


