# Stemlængde (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stemlængde (DSR)**

## ValueSet: Stemlængde (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StemlaengdeDSR | *Version*:2.27.0 |
| Active as of 2022-10-06 | *Computable Name*:StemlaengdeDSR |

 
Stemlængde (DSR) 

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
  "id" : "StemlaengdeDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StemlaengdeDSR",
  "version" : "2.27.0",
  "name" : "StemlaengdeDSR",
  "title" : "Stemlængde (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Stemlængde (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "standard_length",
        "display" : "Standard længde"
      },
      {
        "code" : "extra_length",
        "display" : "Extra længde"
      },
      {
        "code" : "short_mini_length",
        "display" : "Kort/mini"
      }]
    }]
  }
}

```
