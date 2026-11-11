# Anæstesi - Generel og lokal anæstesi - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi - Generel og lokal anæstesi**

## ValueSet: Anæstesi - Generel og lokal anæstesi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnaestesiLokalGenerel | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:AnaestesiLokalGenerel |

 
Værdier for generel og lokal anæstesi. 

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
  "id" : "AnaestesiLokalGenerel",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnaestesiLokalGenerel",
  "version" : "2.27.2",
  "name" : "AnaestesiLokalGenerel",
  "title" : "Anæstesi - Generel og lokal anæstesi",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Værdier for generel og lokal anæstesi.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "gen_anesthesia",
        "display" : "Generel anæstesi (GA)"
      },
      {
        "code" : "local_anesthesia",
        "display" : "Lokal anæstesi (LA)"
      }]
    }]
  }
}

```
