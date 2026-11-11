# Revision - Humerus komponent (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision - Humerus komponent (DSR)**

## ValueSet: Revision - Humerus komponent (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionHumerusKomponentDSR | *Version*:2.27.2 |
| Active as of 2022-10-07 | *Computable Name*:RevisionHumerusKomponentDSR |

 
Revision - Humerus komponent (DSR) 

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
  "id" : "RevisionHumerusKomponentDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionHumerusKomponentDSR",
  "version" : "2.27.2",
  "name" : "RevisionHumerusKomponentDSR",
  "title" : "Revision - Humerus komponent (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revision - Humerus komponent (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "liner",
        "display" : "Kun liner"
      },
      {
        "code" : "caput",
        "display" : "Kun caput"
      },
      {
        "code" : "component",
        "display" : "Hele komponenten"
      },
      {
        "code" : "cement_spacer",
        "display" : "Cementspacer"
      }]
    }]
  }
}

```
