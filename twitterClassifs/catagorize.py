import sklearn
from sklearn import datasets
categories = ['fLearnWord', 'tLearnWord']
tData = sklearn.datasets.load_files('/home/bergeron/scikit-learn/scikit-learn-master/sklearn/twitter_data/data/tData', load_content=True, encoding='utf-8')
from sklearn.feature_extraction.text import CountVectorizer
count_vect = CountVectorizer()
X_train_counts = count_vect.fit_transform(tData.data)

from sklearn.feature_extraction.text import TfidfTransformer
tf_transformer = TfidfTransformer(use_idf=False).fit(X_train_counts)
X_train_tf = tf_transformer.transform(X_train_counts)

tfidf_transformer = TfidfTransformer()
X_train_tfidf = tfidf_transformer.fit_transform(X_train_counts)
from sklearn.naive_bayes import MultinomialNB
clf = MultinomialNB().fit(X_train_tfidf, tData.target)

#>>> docs_new = ['Why are depressed people always asking me for shit?', 'I dont know how not to be sad anymore']
#>>> X_new_counts = count_vect.transform(docs_new)
#>>> X_new_tfidf = tfidf_transformer.transform(X_new_counts)
#>>> predicted = clf.predict(X_new_tfidf)
#>>> for doc, category in zip(docs_new, predicted):
#...     print('%r => %s' % (doc, tData.target_names[category]))

from sklearn.pipeline import Pipeline
text_clf = Pipeline([('vect', CountVectorizer()), ('tfidf', TfidfTransformer()), ('clf', MultinomialNB()),])
text_clf.fit(tData.data, tData.target)

import numpy as np
docs_test = tData.data
predicted = text_clf.predict(docs_test)
np.mean(predicted == tData.target)