# Påvisning af vasospasme; metode - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Påvisning af vasospasme; metode**

## ValueSet: Påvisning af vasospasme; metode 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VasospasmerPaavisning | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:VasospasmerPaavisning |

 
Påvisning af vasospasme; metode 

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
  "id" : "VasospasmerPaavisning",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VasospasmerPaavisning",
  "version" : "2.27.0",
  "name" : "VasospasmerPaavisning",
  "title" : "Påvisning af vasospasme; metode",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Påvisning af vasospasme; metode",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DetectionMethods",
      "concept" : [{
        "code" : "doppler",
        "display" : "Transcraniel doppler"
      },
      {
        "code" : "clinical",
        "display" : "Kliniske"
      },
      {
        "code" : "radiological",
        "display" : "Radiologisk påvist"
      }]
    }]
  }
}

```
