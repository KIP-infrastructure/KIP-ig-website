# Type af præoperativ endoskopisk lokalresektion DCCG - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type af præoperativ endoskopisk lokalresektion DCCG**

## ValueSet: Type af præoperativ endoskopisk lokalresektion DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionDCCG | *Version*:2.27.3 |
| Retired as of 2022-09-07 | *Computable Name*:TypeLokalresektionDCCG |

 
Type af præoperativ endoskopisk lokalresektion DCCG 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TypeLokalresektionDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionDCCG",
  "version" : "2.27.3",
  "name" : "TypeLokalresektionDCCG",
  "title" : "Type af præoperativ endoskopisk lokalresektion DCCG",
  "status" : "retired",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Type af præoperativ endoskopisk lokalresektion DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "local_resection",
        "display" : "Endoskopisk lokalresektion (ekskl. TES)"
      },
      {
        "code" : "local_resection_tes",
        "display" : "Endoskopisk lokalresektion efterfulgt af TES"
      },
      {
        "code" : "transanal_resection",
        "display" : "Transanal endoskopisk lokalresektion (TES)"
      },
      {
        "code" : "polypectomy",
        "display" : "Polypektomi"
      },
      {
        "code" : "emr",
        "display" : "EMR inkl. piecemeal EMR"
      },
      {
        "code" : "piecemeal_resection",
        "display" : "Piecemeal resektion"
      },
      {
        "code" : "full_wall_resection",
        "display" : "Endoskopisk fuldvægsresektion"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden endoskopisk procedure"
      }]
    }]
  }
}

```
