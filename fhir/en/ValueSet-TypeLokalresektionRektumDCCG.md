# Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG**

## ValueSet: Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionRektumDCCG | *Version*:2.27.1 |
| Active as of 2023-04-13 | *Computable Name*:TypeLokalresektionRektumDCCG |

 
Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG 

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
  "id" : "TypeLokalresektionRektumDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionRektumDCCG",
  "version" : "2.27.1",
  "name" : "TypeLokalresektionRektumDCCG",
  "title" : "Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG",
  "status" : "active",
  "date" : "2023-04-13T00:00:00+02:00",
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
  "description" : "Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG",
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
      }]
    }]
  }
}

```
