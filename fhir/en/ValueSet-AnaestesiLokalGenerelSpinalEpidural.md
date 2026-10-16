# Anæstesi - Generel, lokal og spinal/epidural anæstesi - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi - Generel, lokal og spinal/epidural anæstesi**

## ValueSet: Anæstesi - Generel, lokal og spinal/epidural anæstesi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnaestesiLokalGenerelSpinalEpidural | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:AnaestesiLokalGenerelSpinalEpidural |

 
Værdier for generel, lokal og spinal/epidural anæstesi. 

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
  "id" : "AnaestesiLokalGenerelSpinalEpidural",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnaestesiLokalGenerelSpinalEpidural",
  "version" : "2.27.0",
  "name" : "AnaestesiLokalGenerelSpinalEpidural",
  "title" : "Anæstesi - Generel, lokal og spinal/epidural anæstesi",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Værdier for generel, lokal og spinal/epidural anæstesi.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "regional",
        "display" : "Spinal/epidural"
      },
      {
        "code" : "gen_anesthesia",
        "display" : "Generel anæstesi"
      },
      {
        "code" : "local_anesthesia",
        "display" : "Lokal anæstesi, alene"
      }]
    }]
  }
}

```
