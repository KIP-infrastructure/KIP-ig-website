# Sygdomsudbredelse i lymfe områder - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsudbredelse i lymfe områder**

## ValueSet: Sygdomsudbredelse i lymfe områder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokationLymphomas | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:LokationLymphomas |

 
Sygdomsudbredelse i lymfe områder 

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
  "id" : "LokationLymphomas",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokationLymphomas",
  "version" : "2.27.0",
  "name" : "LokationLymphomas",
  "title" : "Sygdomsudbredelse i lymfe områder",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Sygdomsudbredelse i lymfe områder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseaseLocalization",
      "concept" : [{
        "code" : "nodal",
        "display" : "Nodalt"
      },
      {
        "code" : "extranodel",
        "display" : "Ekstranodalt"
      }]
    }]
  }
}

```
