# Luftvejshåndtering sidste forsøg - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Luftvejshåndtering sidste forsøg**

## ValueSet: Luftvejshåndtering sidste forsøg 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandteringsidsteforsoeg | *Version*:2.27.1 |
| Active as of 2022-10-04 | *Computable Name*:LuftvejsHaandteringsidsteforsoeg |

 
Luftvejshåndtering sidste forsøg 

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
  "id" : "LuftvejsHaandteringsidsteforsoeg",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandteringsidsteforsoeg",
  "version" : "2.27.1",
  "name" : "LuftvejsHaandteringsidsteforsoeg",
  "title" : "Luftvejshåndtering sidste forsøg",
  "status" : "active",
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Luftvejshåndtering sidste forsøg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
      "concept" : [{
        "code" : "larynx_all",
        "display" : "LMA (alle typer)"
      },
      {
        "code" : "intub_dir_laryngo",
        "display" : "Direkte laryngoskopi"
      },
      {
        "code" : "intub_video_laryngo",
        "display" : "Videolaryngoskopi"
      },
      {
        "code" : "intub_flex_skop",
        "display" : "Fleksibelt skopi"
      },
      {
        "code" : "patient",
        "display" : "Vækning af patient"
      },
      {
        "code" : "tracheostomi",
        "display" : "Tracheostomi i LA"
      },
      {
        "code" : "tracheostomi_emg",
        "display" : "Nødtracheostomi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden teknik"
      }]
    }]
  }
}

```
