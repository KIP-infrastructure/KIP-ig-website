# Liner komponent uden Post (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liner komponent uden Post (DKR)**

## ValueSet: Liner komponent uden Post (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LinerUdenPostDKR | *Version*:2.27.1 |
| Active as of 2023-12-18 | *Computable Name*:LinerUdenPostDKR |

 
Liner komponent uden Post (DKR) 

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
  "id" : "LinerUdenPostDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LinerUdenPostDKR",
  "version" : "2.27.1",
  "name" : "LinerUdenPostDKR",
  "title" : "Liner komponent uden Post (DKR)",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Liner komponent uden Post (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KomponentLiner",
      "concept" : [{
        "code" : "traditional_cr",
        "display" : "Ingen constraint (traditionel CR)"
      },
      {
        "code" : "medial",
        "display" : "Medial stabilized (øget kongruens og konformitet kun medialt)"
      },
      {
        "code" : "medial_lateral",
        "display" : "Medial og lateral øget constraint (typisk er der øget constraint anteriort)"
      },
      {
        "code" : "rotating",
        "display" : "Rotating platform"
      },
      {
        "code" : "bi_retain",
        "display" : "Bi-cruciate retaining (begge korsbånd bevaret)"
      }]
    }]
  }
}

```
