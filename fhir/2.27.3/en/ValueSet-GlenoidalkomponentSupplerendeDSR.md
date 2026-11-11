# Glenoidalkomponent - supplerende (DSR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Glenoidalkomponent - supplerende (DSR)**

## ValueSet: Glenoidalkomponent - supplerende (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GlenoidalkomponentSupplerendeDSR | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:GlenoidalkomponentSupplerendeDSR |

 
Glenoidalkomponent - supplerende (DSR) 

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
  "id" : "GlenoidalkomponentSupplerendeDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GlenoidalkomponentSupplerendeDSR",
  "version" : "2.27.3",
  "name" : "GlenoidalkomponentSupplerendeDSR",
  "title" : "Glenoidalkomponent - supplerende (DSR)",
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
  "description" : "Glenoidalkomponent - supplerende (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "polyethylene_cool",
        "display" : "Polyethylen køl"
      },
      {
        "code" : "polyethylene_pegs",
        "display" : "Polyethylen pegs"
      },
      {
        "code" : "metal_pegs",
        "display" : "Metal pegs"
      },
      {
        "code" : "screws",
        "display" : "Skruer"
      },
      {
        "code" : "augmented",
        "display" : "Augmented"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
