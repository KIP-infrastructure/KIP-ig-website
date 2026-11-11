# Stemkarakteristik (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stemkarakteristik (DSR)**

## ValueSet: Stemkarakteristik (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StemkarakteristikDSR | *Version*:2.27.2 |
| Active as of 2022-10-06 | *Computable Name*:StemkarakteristikDSR |

 
Stemkarakteristik (DSR) 

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
  "id" : "StemkarakteristikDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StemkarakteristikDSR",
  "version" : "2.27.2",
  "name" : "StemkarakteristikDSR",
  "title" : "Stemkarakteristik (DSR)",
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
  "description" : "Stemkarakteristik (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "resurfacing",
        "display" : "Resurfacing (inkl hemicap)"
      },
      {
        "code" : "stemless",
        "display" : "Stemless (metafysær fiksation)"
      },
      {
        "code" : "stem",
        "display" : "Stem"
      }]
    }]
  }
}

```
