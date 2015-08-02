from project_module import project_object, image_object, link_object, challenge_object

p = project_object('insult', 'Insulter')
p.domain = 'http://www.aidansean.com/'
p.path = 'insult'
p.preview_image    = image_object('%s/images/project.jpg'   %p.path, 150, 250)
p.preview_image_bw = image_object('%s/images/project_bw.jpg'%p.path, 150, 250)
p.folder_name = 'aidansean'
p.github_repo_name = 'insult'
p.mathjax = False
p.tags = 'Frivolous'
p.technologies = 'CSS,HTML,PHP'
p.links.append(link_object(p.domain, 'insult', 'Live page'))
p.introduction = 'This is another simple and frivolous project.  A student showed me a page illustrated a table with three columns that could be used to make an insult.  It looked liek it should be coded up, and I had 15 minutes to spare, so I did.'
p.overview = '''The insult is generated randomly using PHP.  This ensures that the user has no way to know in advance how many possible insults there are, or how many combinations are available.  This can, of course, be extended to anything, and may be used to give random compliments in the future.'''
