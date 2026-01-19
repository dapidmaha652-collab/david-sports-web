class Person:
    def __init__(self, name, gender):
        self.name = name
        self.gender = gender
        self.parents = []
        self.children = []

    def add_child(self, child):
        self.children.append(child)
        child.parents.append(self)

    def __repr__(self):
        return f"{self.name} ({self.gender})"

def print_family_tree(person, level=0):
    print('  ' * level + str(person))
    for child in person.children:
        print_family_tree(child, level + 1)

def find_person(name, people):
    for person in people:
        if person.name == name:
            return person
    return None

def main():
    # Daftar anggota keluarga yang sudah ada
    
    people = [
        Person("Rejeki", "Pak Tua"),
        Person("Sahun Br. Ginting", "Bik Tua"),
        Person("Trima Br. Ginting", "Bik Tengah"),
        Person("Aloken Ginting", "Bapak"),
        Person("Perpulungen Ginting", "Pak Uda"),
        Person("Cinta Br. Ginting", "Bik Uda")
    ]

    people= [
        Person("Maria Br. Barus", "Bik Tua Dari Ibu"),
        Person("Karben Barus", "Bama Tua"),
        Person("Rosa Br. Barus", "Bik Tengah Dari Ibu"),
        Person("Masterina Br. Barus", "Bik Tengah dari Ibu"),
        Person("Adelina Br. Barus", "Bik Tengah dari Ibu"),
        Person("Rosda Br. Barus", "Bik Tengah Drai Ibu"),
        Person("Erna Br. Barus", "Ibu/Mamak"),
        Person("Dalela Br. Barus", "Bik Uda"),
        Person("Robianus Braus", "Mama Tenggah"),
        Person("Sarmon Barus", "Mama Uda")

    ]
    people= [
        Person("Nia Br. Ginting", "Kak Tua"),
        Person("Desy Br. Ginting", "Kak Tenggah"),
        Person("Alitra Ginting", "SAYA SENDIRI"),

    ]

    while True:
        print("\nMenu:")
        print("1. Tambah anggota keluarga")
        print("2. Tambah hubungan orang tua-anak")
        print("3. Tampilkan pohon keluarga")
        print("4. Keluar")
        choice = input("Pilih opsi: ")

        if choice == '1':
            name = input("Masukkan nama: ")
            gender = input("Masukkan jenis kelamin (Male/Female): ")
            if find_person(name, people) is None:
                person = Person(name, gender)
                people.append(person)
                print(f"{name} ({gender}) telah ditambahkan ke dalam keluarga.")
            else:
                print(f"{name} sudah ada dalam keluarga.")
        
        elif choice == '2':
            parent_name = input("Masukkan nama orang tua: ")
            child_name = input("Masukkan nama anak: ")
            parent = find_person(parent_name, people)
            child = find_person(child_name, people)
            if parent and child:
                parent.add_child(child)
                print(f"Hubungan {parent_name} sebagai orang tua dari {child_name} telah ditambahkan.")
            else:
                print("Orang tua atau anak tidak ditemukan.")
        
        elif choice == '3':
            name = input("Masukkan nama anggota keluarga untuk menampilkan pohon keluarga: ")
            person = find_person(name, people)
            if person:
                print(f"Pohon keluarga dimulai dari {name}:")
                print_family_tree(person)
            else:
                print(f"{name} tidak ditemukan dalam keluarga.")
        
        elif choice == '4':
            break
        else:
            print("Opsi tidak valid, silakan coba lagi.")

if __name__ == "__main__":
    main()
