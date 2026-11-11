# Caput modulær type - (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caput modulær type - (DHR)**

## ValueSet: Caput modulær type - (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CaputModulaerTypeDHR | *Version*:2.27.2 |
| Active as of 2022-11-02 | *Computable Name*:CaputModulaerTypeDHR |

 
Caput modulær type - (DHR) 

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
  "id" : "CaputModulaerTypeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CaputModulaerTypeDHR",
  "version" : "2.27.2",
  "name" : "CaputModulaerTypeDHR",
  "title" : "Caput modulær type - (DHR)",
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
  "description" : "Caput modulær type - (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "firm_neck",
        "display" : "Fast hals"
      },
      {
        "code" : "detachable_neck",
        "display" : "Aftagelig hals (neck segment)"
      }]
    }]
  }
}

```
