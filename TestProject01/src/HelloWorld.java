import java.util.ArrayList;
import java.util.List;

public class HelloWorld {

	public static void main(String[] args) {
	
		List<String>list = new ArrayList<String>();
		
		//値の記憶はaddメゾッドを利用
		list.add("1");
		list.add("2");
		list.add("3");
		list.add("4");
		list.add("5");
		
		//値の取得
		for (int i = 0; i < list.size() -1; i++){
			//値の取得はgetメゾッドを利用
			System.out.println(list.get(i));
		}
		
		//拡張for文を利用するともっと簡単
		for (String s :list){
			System.out.println(s);
		}
	}

}
