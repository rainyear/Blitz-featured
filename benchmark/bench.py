import os, random, string, timeit
import os.path
from timeit import Timer

cur = os.getcwd()

def smarty():
	os.chdir(os.path.join(cur, 'smarty'))
	os.system('php index.php')
def blitz():
	os.chdir(os.path.join(cur, 'blitz'))
	os.system('php index.php')
def main(fun, times = 10000):
	t = Timer("%s()" % fun, "from __main__ import *")
	print 'function: %s used %f' % (fun, t.timeit(times) / times)
if __name__ == "__main__":
	main('smarty', 10)
	main('blitz', 10)
