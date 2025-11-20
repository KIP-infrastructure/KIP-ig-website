# Cytogenetiske kræft forandringer - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetiske kræft forandringer**

## ValueSet: Cytogenetiske kræft forandringer (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticCancerChangesALD | *Version*:2.14.1 |
| Active as of 2022-07-13 | *Computable Name*:CytogeneticCancerChangesALD |

 
Cytogenetiske WHO specifikke recurrente forandringer i forhold til kræft [ALD] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 13 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "CytogeneticCancerChangesALD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticCancerChangesALD",
  "version" : "2.14.1",
  "name" : "CytogeneticCancerChangesALD",
  "title" : "Cytogenetiske kræft forandringer",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Cytogenetiske WHO specifikke recurrente forandringer i forhold til kræft [ALD]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M98963",
            "display" : "t(8;21)(q22;q22) RUNX1-RUNX1T1"
          },
          {
            "code" : "M98713",
            "display" : "inv(16)(p13.1q22) or t(16;16)(p13.1q22) CBFB-/MYH11"
          },
          {
            "code" : "M98663",
            "display" : "t(15;17)(q22;q21) PML-RARA"
          },
          {
            "code" : "M98973",
            "display" : "t(9;11)(p22;q23) MLLT3-MLL"
          },
          {
            "code" : "M98653",
            "display" : "t(6;9)(p22;q34) DEK-NUP214"
          },
          {
            "code" : "M98693",
            "display" : "inv(3)(q21q26.2) eller t(3;3)(q21q26.2) RPN1-EV1"
          },
          {
            "code" : "M99113",
            "display" : "t(1;22)(p13;q13) RBM15-MKL1"
          },
          {
            "code" : "M98063",
            "display" : "t(9;22)(q34;q11.2) BCR-ABL1"
          },
          {
            "code" : "M98073",
            "display" : "t(v;11q23) MLL rearrangeret"
          },
          {
            "code" : "M98143",
            "display" : "t(12;21)(p13;q22) d"
          },
          {
            "code" : "M98173",
            "display" : "t(5;14)(q31;q32) IL3-IGH@"
          },
          {
            "code" : "M98153",
            "display" : "B-lymfoblast leukæmi med hyperdiploidi"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen"
          }
        ]
      }
    ]
  }
}

```
