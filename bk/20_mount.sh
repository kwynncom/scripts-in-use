SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

source public_paths.sh
source PRIVATE_paths.sh

if [ ! -d "$KWBK23MNTMP" ]; then
	mkdir $KWBK23MNTMP
fi


if [ ! -f "$KWBK23TOUF" ]; then
	sudo mount $KWBK23MNTDEV $KWBK23MNTMP
	touch $KWBK23TOUF
fi
