# Anæstesiydelse DAD - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesiydelse DAD**

## ValueSet: Anæstesiydelse DAD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaServiceDAD | *Version*:2.27.0 |
| Active as of 2022-06-09 | *Computable Name*:AnasthesiaServiceDAD |

 
Anæstesiydelse 

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
  "id" : "AnasthesiaServiceDAD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaServiceDAD",
  "version" : "2.27.0",
  "name" : "AnasthesiaServiceDAD",
  "title" : "Anæstesiydelse DAD",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Anæstesiydelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "administration_epidural",
        "display" : "Epidural smertebehandling"
      },
      {
        "code" : "epidural",
        "display" : "Fødeepidural"
      },
      {
        "code" : "spinal",
        "display" : "Fødespinal"
      },
      {
        "code" : "nerve_block",
        "display" : "Perifer blokade"
      }]
    }]
  }
}

```
