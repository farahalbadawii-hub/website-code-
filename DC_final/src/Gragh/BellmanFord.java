package Gragh;

public class BellmanFord {

    public void Bellman(int[][] graph, int start, int d) {
        
        int V = graph.length;

        
        int E = 0;
        for (int u = 0; u < V; u++) {  // build Edge from adjacency matrix
        	
           for (int v = 0; v < V; v++) {
            	
                if (graph[u][v] != 0) E++;
            }
        }
        
        Edge[] edges = new Edge[E];
        
        int index = 0;
        
        for (int u = 0; u < V; u++) {
        	
          for (int v = 0; v < V; v++) {
            	
           if (graph[u][v] != 0) {
               	
             edges[index++] = new Edge(u, v, graph[u][v]);
                
           }
            }
        }

        int[] distance = new int[V];
       
        int[] prev = new int[V];

        for (int i = 0; i < V; i++) {  // fill array 
            
        	distance[i] = Integer.MAX_VALUE; // MAX_VALUE means infinity or unreached
        }
        
        for (int i = 0; i < V; i++) {
            
        	prev[i] = -1;
        }

        distance[start] = 0;

        
        for (int j = 0; j < E; j++) {  
            
        	int u = edges[j].start; // start of the edge 
           
            int v = edges[j].end;   // destination 
            
            int cost = edges[j].cost;  // Weight 
            
            if (distance[u] != Integer.MAX_VALUE && distance[u] + cost < distance[v]) {
               
            	distance[v] = distance[u] + cost;
               
            	prev[v] = u;
            }
        }

        for (int i = 1; i < V-1; i++) {  // Relax all edges
           
        	for (int j = 0; j < E; j++) {
               
        		int u = edges[j].start; // start of the edge 
                
        		int v = edges[j].end;   // destination 
               
        		int cost = edges[j].cost;  //Weight 
                
        		if (distance[u] != Integer.MAX_VALUE && distance[u] + cost < distance[v]) { // only from visited vertices 
                    
        			distance[v] = distance[u] + cost;
                    
        			prev[v] = u;
                }
        	}}
     

        
        for (int j = 0; j < E; j++) { // check the negative 
            int u = edges[j].start;
            
            int v = edges[j].end;
            
            int cost = edges[j].cost;
            
            if (distance[u] != Integer.MAX_VALUE && distance[u] + cost < distance[v]) {
            	
                return;
            }
        }

        
        if (distance[d] == Integer.MAX_VALUE) {
        	
            System.out.println("no path");
            
            return;
        }

        
        
        System.out.print("the shortest path from " + start + " to " + d + " = ");

        print(prev, d);
        
        System.out.println();
    }
      
    private void print(int[] prev, int v) {
        
    	if (v == -1) return;
        
    	print(prev, prev[v]);
       
    	System.out.print(v + " ");
    }
}
