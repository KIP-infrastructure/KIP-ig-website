# Bilateral / Unilateral - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bilateral / Unilateral**

## ValueSet: Bilateral / Unilateral 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BilateralUnilateral | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:BilateralUnilateral |

 
Bilateral / Unilateral 

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
  "id" : "BilateralUnilateral",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BilateralUnilateral",
  "version" : "2.27.1",
  "name" : "BilateralUnilateral",
  "title" : "Bilateral / Unilateral",
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
  "description" : "Bilateral / Unilateral",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "bilateral",
        "display" : "Bilateral"
      },
      {
        "code" : "unilateral",
        "display" : "Unilateral"
      }]
    }]
  }
}

```
