# Linertype - (DHR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Linertype - (DHR)**

## ValueSet: Linertype - (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LinertypeDHR | *Version*:2.27.3 |
| Active as of 2022-11-02 | *Computable Name*:LinertypeDHR |

 
Linertype - (DHR) 

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
  "id" : "LinertypeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LinertypeDHR",
  "version" : "2.27.3",
  "name" : "LinertypeDHR",
  "title" : "Linertype - (DHR)",
  "status" : "active",
  "date" : "2022-11-02T00:00:00+02:00",
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
  "description" : "Linertype - (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "non_constrained",
        "display" : "Ikke-constrained"
      },
      {
        "code" : "constrained",
        "display" : "Constrained"
      },
      {
        "code" : "double_mobility",
        "display" : "Double mobility"
      }]
    }]
  }
}

```
