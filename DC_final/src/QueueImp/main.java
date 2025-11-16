package QueueImp;

public class main {
    public static void main (String[] args) {
        Queue q = new Queue();
       
        q.enqueue(3);
//        q.print();
//        q.enqueue(2);
//        q.print();
        q.enqueue(5);
        q.print();
//        q.enqueue(8);
//        q.print();
//        q.dequeue();
//        q.print();  
//
        q.dequeue();
        q.print(); 

//       q.dequeue();
//        q.print();  
//        q.dequeue();
//        q.print();

        q.isEmpty();
        q.enqueue(8);
    
        q.enqueue(3);
        q.print();
        
        q.front();

      
    }
}
