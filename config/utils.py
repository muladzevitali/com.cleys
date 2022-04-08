import os


def get_image_path(instance, filename, upload_to):
    os.makedirs(upload_to, exist_ok=True)
    sub_folders = os.listdir(upload_to)
    if not sub_folders:
        folder = 1
        os.makedirs(os.path.join(upload_to, str(folder)), exist_ok=True)
    else:
        folder = str(max(sub_folders, key=int))
    if len(os.listdir(os.path.join(upload_to, str(folder)))) > 200:
        folder = f'{int(folder) + 1}'
        os.makedirs(os.path.join(upload_to, str(folder)), exist_ok=True)

    return os.path.join(upload_to, folder, filename)
