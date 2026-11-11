# LuftvejForsøgsplan - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **LuftvejForsøgsplan**

## ValueSet: LuftvejForsøgsplan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LuftvejForsoeg | *Version*:2.27.3 |
| Active as of 2022-06-01 | *Computable Name*:LuftvejForsoeg |

 
1.-6. forsøg på etablering af Luftvejsadgang 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "LuftvejForsoeg",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LuftvejForsoeg",
  "version" : "2.27.3",
  "name" : "LuftvejForsoeg",
  "title" : "LuftvejForsøgsplan",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "1.-6. forsøg på etablering af Luftvejsadgang",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
      "concept" : [{
        "code" : "without_further",
        "display" : "Intet yderligere"
      },
      {
        "code" : "larynx_all",
        "display" : "Larynxmaske (alle typer)"
      },
      {
        "code" : "intub_dir_laryngo",
        "display" : "Intubation ved direkte laryngoskopi"
      },
      {
        "code" : "intub_video_laryngo",
        "display" : "Intubation med videolaryngoskopi"
      },
      {
        "code" : "intub_flex_skop",
        "display" : "Intubation med fleksibelt skopi"
      },
      {
        "code" : "tracheostomi_loc",
        "display" : "Tracheostomi i lokalanæstesi"
      },
      {
        "code" : "tracheostomi_emg",
        "display" : "Nødtracheostomi"
      },
      {
        "code" : "intub_diff",
        "display" : "Intubation ved anden metode"
      }]
    }]
  }
}

```
