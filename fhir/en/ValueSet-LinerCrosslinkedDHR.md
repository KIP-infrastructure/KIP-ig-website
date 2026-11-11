# Liner - Crosslinked (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liner - Crosslinked (DHR)**

## ValueSet: Liner - Crosslinked (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LinerCrosslinkedDHR | *Version*:2.27.2 |
| Active as of 2022-11-08 | *Computable Name*:LinerCrosslinkedDHR |

 
Liner - Crosslinked (DHR) 

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
  "id" : "LinerCrosslinkedDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LinerCrosslinkedDHR",
  "version" : "2.27.2",
  "name" : "LinerCrosslinkedDHR",
  "title" : "Liner - Crosslinked (DHR)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Liner - Crosslinked (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "non_highy_crosslinked",
        "display" : "Ikke highly-crosslinked"
      },
      {
        "code" : "highly_crosslinked",
        "display" : "Highly crosslinked"
      },
      {
        "code" : "highly_crosslinked_antioxidant",
        "display" : "Highly crosslinked med antioxidant (Vitamin E og AOX)"
      }]
    }]
  }
}

```
