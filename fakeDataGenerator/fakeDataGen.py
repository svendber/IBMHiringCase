#!/usr/bin/env python
from mimesis import Person
from mimesis.enums import Gender
from mimesis import Generic
# from mimesis.Internet import Internet
from mimesis import Internet
from mimesis import Text
from mimesis.builtins import DenmarkSpecProvider
import json
import random

Internet = Internet()
text= Text()

generic = Generic('da')
DenmarkSpecProvider.Meta.name = 'DK'
generic.add_provider(DenmarkSpecProvider)
person = Person('da')

temp = []

def fake_data():
	people = {
		'person': person.full_name(),
		'age': person.age(minimum=18, maximum=80),
		'telephone':person.telephone('########'),
        'email': person.email(),
        'cpr': generic.DK.cpr(),
        'image': Internet.stock_image(width=240, height=120),
        'quote': text.quote()
	}

	temp.append(people)
	return temp
def fake_image():
    return random.choice(movie_list)

for _ in range(0,5):
	fake_data()

print(json.dumps(temp))


