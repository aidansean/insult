from project_module import project_object, image_object, link_object, challenge_object

p = project_object('insult', 'Insulter')
p.domain = 'http://www.aidansean.com/'
p.path = 'hotel'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'insult'
p.mathjax = False
p.links.append(link_object(p.domain, 'insult', 'Live page'))
p.introduction = 'This is another simple and frivolous project.  A student showed me a page illustrated a table with three columns that could be used to make an insult.  It looked liek it should be coded up, and I had 15 minutes to spare, so I did.'
p.overview = '''The insult is generated randomly using PHP.  This ensures that the user has no way to know in advance how many possible insults there are, or how many combinations are available.'''
