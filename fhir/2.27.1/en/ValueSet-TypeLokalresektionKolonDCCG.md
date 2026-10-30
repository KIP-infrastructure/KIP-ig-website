# Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG**

## ValueSet: Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionKolonDCCG | *Version*:2.27.1 |
| Active as of 2023-04-13 | *Computable Name*:TypeLokalresektionKolonDCCG |

 
Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG 

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
  "id" : "TypeLokalresektionKolonDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TypeLokalresektionKolonDCCG",
  "version" : "2.27.1",
  "name" : "TypeLokalresektionKolonDCCG",
  "title" : "Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG",
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
  "description" : "Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
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
