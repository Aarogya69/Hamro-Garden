from django.test import TestCase

from product.models import Category

# Create your tests here.

class BasicTest(TestCase):

    def test_fields(self):

        category = Category()

        category.name= "Plants"

        category.slug= "plants"

        category.save()

       

        check = Category.objects.get(id=1)

        self.assertEqual(check, category)


