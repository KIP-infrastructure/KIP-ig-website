# Hjerterytme - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerterytme**

## ValueSet: Hjerterytme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HeartRhythm | *Version*:2.27.3 |
| Active as of 2022-06-22 | *Computable Name*:HeartRhythm |

 
Hjerterytme 

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
  "id" : "HeartRhythm",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HeartRhythm",
  "version" : "2.27.3",
  "name" : "HeartRhythm",
  "title" : "Hjerterytme",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Hjerterytme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HeartRhythm",
      "concept" : [{
        "code" : "sr",
        "display" : "SR"
      },
      {
        "code" : "afliafla",
        "display" : "Afli/Afla"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "EKG mangler"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
