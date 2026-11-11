# Anæstesi Type Generel - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi Type Generel**

## ValueSet: Anæstesi Type Generel 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaTypeGen | *Version*:2.27.3 |
| Active as of 2022-06-09 | *Computable Name*:AnasthesiaTypeGen |

 
Generel Anæstesiydelse - Tillæg 

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
  "id" : "AnasthesiaTypeGen",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaTypeGen",
  "version" : "2.27.3",
  "name" : "AnasthesiaTypeGen",
  "title" : "Anæstesi Type Generel",
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
  "description" : "Generel Anæstesiydelse - Tillæg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaTypeGen",
      "concept" : [{
        "code" : "inhalation",
        "display" : "Inhalation"
      },
      {
        "code" : "IV_inhalation",
        "display" : "IV og inhalation"
      },
      {
        "code" : "TIVA",
        "display" : "TIVA"
      }]
    }]
  }
}

```
