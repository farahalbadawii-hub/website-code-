package Gragh;

public class Main {
    
    private static void insert(int[][] g, int u, int v, int w) { g[u][v] = w; }

    public static void main(String[] args) {
        int V = 5;
        int[][] graph = new int[V][V];

        insert(graph, 0, 1, 6);
       
       insert(graph, 0, 2, 7);
        
         insert(graph, 1, 2, 8);
        
       insert(graph, 1, 3, 5);
       
//       insert(graph, 1, 4, -4);
//        
//       insert(graph, 2, 3, -3);
//        
//       insert(graph, 2, 4, 9);
//        
//       insert(graph, 3, 1, -2);
      
       insert(graph, 4, 0, 2);
        
       insert(graph, 4, 3, 7);

        new BellmanFord().Bellman(graph, 0, 4);
    }
}
