# Polyppens endoskopiske udseende - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Polyppens endoskopiske udseende**

## ValueSet: Polyppens endoskopiske udseende 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EndoskopiskUdseende | *Version*:2.27.3 |
| Active as of 2022-09-07 | *Computable Name*:EndoskopiskUdseende |

 
Polyppens endoskopiske udseende 

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
  "id" : "EndoskopiskUdseende",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EndoskopiskUdseende",
  "version" : "2.27.3",
  "name" : "EndoskopiskUdseende",
  "title" : "Polyppens endoskopiske udseende",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Polyppens endoskopiske udseende",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EndoscopicAppearance",
      "concept" : [{
        "code" : "stalk",
        "display" : "Stilket"
      },
      {
        "code" : "broad",
        "display" : "Bredbaset"
      },
      {
        "code" : "non_polypoid",
        "display" : "Non-polypoid"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden morfologi"
      }]
    }]
  }
}

```
