#include <irrlicht.h>
#include <iostream>

using namespace irr;
using namespace core;
using namespace scene;
using namespace video;
using namespace io;
using namespace gui;

#ifdef _MSC_VER
#pragma comment(lib, "Irrlicht.lib")
#pragma comment(linker, "/subsystem:windows /ENTRY:mainCRTStartup")
#endif

int main()
{
    // Inisialisasi Irrlicht Engine
    IrrlichtDevice *device = createDevice(video::EDT_OPENGL, dimension2d<u32>(640, 480), 16, false, false, false, 0);

    if (!device)
        return 1;

    device->setWindowCaption(L"Software Tester Game");

    IVideoDriver* driver = device->getVideoDriver();
    IGUIEnvironment* env = device->getGUIEnvironment();

    // Font bawaan untuk menu
    IGUIFont* defaultFont = env->getBuiltInFont();

    // Font dari fonttool untuk menampilkan FPS
    IGUIFont* customFont = env->getFont("path/to/your/font.xml"); // Ganti dengan path font Anda

    if (!customFont)
    {
        std::cout << "Gagal memuat custom font!" << std::endl;
        return 1;
    }

    // Membuat menu
    IGUIWindow* mainWindow = env->addWindow(rect<s32>(10, 10, 200, 150), false, L"Menu");

    env->addButton(rect<s32>(20, 30, 180, 50), mainWindow, 1, L"Opsi 1");
    env->addButton(rect<s32>(20, 60, 180, 80), mainWindow, 2, L"Opsi 2");
    env->addButton(rect<s32>(20, 90, 180, 110), mainWindow, 3, L"Keluar");

    // Handler untuk event GUI
    class MyEventReceiver : public IEventReceiver
    {
    public:
        virtual bool OnEvent(const SEvent& event)
        {
            if (event.EventType == EET_GUI_EVENT)
            {
                s32 id = event.GUIEvent.Caller->getID();
                IGUIEnvironment* env = Device->getGUIEnvironment();

                switch(event.GUIEvent.EventType)
                {
                case EGET_BUTTON_CLICKED:
                    switch(id)
                    {
                    case 1:
                        // Aksi untuk Opsi 1
                        std::cout << "Opsi 1 dipilih!" << std::endl;
                        return true;
                    case 2:
                        // Aksi untuk Opsi 2
                        std::cout << "Opsi 2 dipilih!" << std::endl;
                        return true;
                    case 3:
                        // Aksi untuk Keluar
                        Device->closeDevice();
                        return true;
                    default:
                        break;
                    }
                    break;
                default:
                    break;
                }
            }

            return false;
        }

        IrrlichtDevice * Device;
    };

    MyEventReceiver receiver;
    receiver.Device = device;
    device->setEventReceiver(&receiver);

    int lastFPS = -1;

    while(device->run())
    {
        driver->beginScene(true, true, video::SColor(255, 100, 101, 140));

        env->drawAll();

        // Menampilkan FPS dengan custom font
        int fps = driver->getFPS();
        if (lastFPS != fps)
        {
            stringw str = L"FPS: ";
            str += fps;

            if (customFont)
                customFont->draw(str.c_str(), rect<s32>(10, 450, 100, 470), video::SColor(255,255,255,0));

            lastFPS = fps;
        }

        driver->endScene();
    }

    device->drop();

    return 0;
}
                                                         
