# POP-Q undersøgelse Kompartment (DUGA) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **POP-Q undersøgelse Kompartment (DUGA)**

## ValueSet: POP-Q undersøgelse Kompartment (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/POPQKompartmentDUGA | *Version*:2.27.2 |
| Active as of 2024-02-13 | *Computable Name*:POPQKompartmentDUGA |

 
Nedsynkning - POP-Q undersøgelse Kompartment (DUGA) 

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
  "id" : "POPQKompartmentDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/POPQKompartmentDUGA",
  "version" : "2.27.2",
  "name" : "POPQKompartmentDUGA",
  "title" : "POP-Q undersøgelse Kompartment (DUGA)",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Nedsynkning - POP-Q undersøgelse Kompartment (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact",
      "concept" : [{
        "code" : "0",
        "display" : "0"
      },
      {
        "code" : "1",
        "display" : "1"
      },
      {
        "code" : "2",
        "display" : "2"
      },
      {
        "code" : "3",
        "display" : "3"
      },
      {
        "code" : "4",
        "display" : "4"
      }]
    }]
  }
}

```
