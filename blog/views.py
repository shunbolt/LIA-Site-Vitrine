from django.shortcuts import render
# from django.http import HttpResponse

# Create your views here.

posts = [
    {
        'author' : 'Shunbolt',
        'title' : 'LIA',
        'content' : 'First post content',
        'date' : 'January 18 2020'
    },
    {
        'author' : 'John Doe',
        'title' : 'Blog post',
        'content' : 'Second post content',
        'date' : 'January 19 2020'
    },         
]


def home(request):
    context = {
        'posts' : posts         
    }
    return render(request, 'blog/home.html', context)
    

def about(request):
    return render(request, 'blog/about.html', {'title' : 'About'})