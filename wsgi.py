#def application(env, start_response):
#    start_response('200 OK', [('Content-Type', 'text/html; charset=utf-8')])
#    return ['<!DOCTYPE html><html><meta charset="utf-8"><title>It works'.encode('utf-8'),
#            "</title><b>It works!</b><br /><br />This is the server's ".encode('utf-8'),
#            'default wsgi.py.'.encode('utf-8')]

from flask_chat import app as application