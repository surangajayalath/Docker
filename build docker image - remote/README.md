# Build Docker image using remote node running container
## Step 1 -> Make private & public key and connect

* Create Keys
* Note: add key name while creating key
```
ssh-keygen -m PEM
```
![Screenshot 2021-12-31 at 7 10 20 PM](https://user-images.githubusercontent.com/56903228/147826184-26b2c241-081b-46e0-a36b-1eb941c9449d.png)

* share public key to remote machine
* check .ssh folder in remote machine(ls -la)
* below ine send public key to remote machine
```
ssh-copy-id -i sura-key suranga@192.168.143.12
```
* try to connect to remote machine using private key
```
ssh -i sura-key 192.168.143.12
```
## Step 2 -> Set up credential in Jenkins and test connection
![Screenshot 2021-12-31 at 7 11 24 PM](https://user-images.githubusercontent.com/56903228/147826222-3636204f-2378-4ad2-a8b5-d928f6f41d95.png)

## Step 3 -> Build Pipeline with docker
* Copy and paste 


# Youtube Links
* https://www.youtube.com/watch?v=EQRjnCypHDQ
* https://www.youtube.com/watch?v=tNXuxMgMBJA
