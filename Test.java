class Test {
    public  int addDigits(int num) {
        int ret = 0;
        if(num < 1){
            return ret;
        }
        ret = 1 + (num-1) % 9;
        return  ret;
    }
    public static  void main(String args[]){
	    Test test = new Test();
    	int ret = test.addDigits(10);
    	System.out.println(ret);
    }
}
