# Implantat - materiale (polyethylen, keramik, metal) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantat - materiale (polyethylen, keramik, metal)**

## ValueSet: Implantat - materiale (polyethylen, keramik, metal) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantatMaterialePolyethylenKeramikMetal | *Version*:2.27.1 |
| Active as of 2022-11-02 | *Computable Name*:ImplantatMaterialePolyethylenKeramikMetal |

 
Implantat - materiale (polyethylen, keramik, metal) 

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
  "id" : "ImplantatMaterialePolyethylenKeramikMetal",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantatMaterialePolyethylenKeramikMetal",
  "version" : "2.27.1",
  "name" : "ImplantatMaterialePolyethylenKeramikMetal",
  "title" : "Implantat - materiale (polyethylen, keramik, metal)",
  "status" : "active",
  "date" : "2022-11-02T00:00:00+02:00",
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
  "description" : "Implantat - materiale (polyethylen, keramik, metal)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "polyethylene",
        "display" : "Polyethylen"
      },
      {
        "code" : "ceramics",
        "display" : "Keramik"
      },
      {
        "code" : "metal",
        "display" : "Metal"
      }]
    }]
  }
}

```
