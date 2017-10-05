import os
import time
import re
trueST = open("trueST.txt", 'r') 
falseST = open("falseST.txt", 'r')
trueRST = open("trueRST.txt", 'a') #includes rest AND streaming tweets indicating depression
falseRST = open("falseRST.txt", 'a') #includes rest AND streaming tweets NOT indicating depression
def sendRest(ID,classif):
    rtFile = open("rest_api_tweets.txt", 'r')
    lines = set(rtFile.readlines())
    for line in lines:
        if ID not in line:
            continue
        else:
            print(line)
            if (classif == 't'):
                trueRST.write(line)
            else:
                falseRST.write(line)
    rtFile.close()
            #stripSaveText(line,streamIndex,restIndex,classif)
    #out.close()
    #quickClass_rest_tweets.close()
    return

for rw in trueST:
    trueRST.write(rw);
    ID = rw.split('\t',2)[0]
    #print(ID)
    #print(type(ID))
    sendRest(ID, 't')


for rw in falseST:
    falseRST.write(rw);
    ID = rw.split('\t',2)[0]
    sendRest(ID, 'f')

trueRST.close()
falseRST.close()
trueST.close()
falseST.close()