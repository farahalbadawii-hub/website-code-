package QueueImp; // doubly linked list to maintain O(1)

public class Queue {

    Node head; 
    Node tail; 
    

    void enqueue(int data) {

        Node n = new Node(data);

        if (head == null) { //check if the list is empty 
            
        	head = n;
        	tail = n;
        	
        	
        } else {
        	
            n.next = head; //insert value form the head 
            
            head.prevois = n;
            
            head = n;
            
        }
    }

    int dequeue() {

        if (tail == null) { //check if the queue is empty 
        	
            System.out.println("error: the queue is empty"); //handling errors 
            
            return -1;  //sentinel value
        }

        int value = tail.data; 
        
        if (head == tail) {    
           
        	head = null;
           tail = null;
           
        } else {    //remove tail in O(1)
           
        tail = tail.prevois;
           
        tail.next = null;
        
        
        }
        return value;
    }

    boolean isEmpty() { 
    	
        if (head== null && tail== null) {
        	
            System.out.println("true");
            
            return true;
       } else {
        	
            System.out.println("false");
            
            return false;
        }
    }

    void front() {  
        
    	if (tail== null) { 
            
    		System.out.println("error: the queue is empty"); //handling errors
          
    	}else {
        	
            System.out.println("front: " + tail.data);
        }
    }

 
	void print() { 
		
		Node i = head;
		
		System.out.print("[");
		
		while(i != null) { 
			
			System.out.print(i.data + " ");
			
			i = i.next;
		}
		System.out.print("]");
	}
}
