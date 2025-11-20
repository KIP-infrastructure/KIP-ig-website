# PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)**

## ValueSet: PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDCytogenetikMDS | *Version*:2.14.1 |
| Active as of 2022-07-19 | *Computable Name*:PatobankSNOMEDCytogenetikMDS |

 
PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "PatobankSNOMEDCytogenetikMDS",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDCytogenetikMDS",
  "version" : "2.14.1",
  "name" : "PatobankSNOMEDCytogenetikMDS",
  "title" : "PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M98963",
            "display" : "AML m. t(8;21); RUNX1-RUNX1T1"
          },
          {
            "code" : "M98713",
            "display" : "AML m. inv(16) el. t(16;16); CBFß-MYH11"
          },
          {
            "code" : "M98663",
            "display" : "akut promyelocyt leukæmi m. t(15;17); PML-RARa"
          },
          {
            "code" : "M98973",
            "display" : "AML m. t(9;11); KMT2A-MLLT3"
          },
          {
            "code" : "M98653",
            "display" : "AML m. t(6;9); DEK-NUP214"
          },
          {
            "code" : "M98693",
            "display" : "AML m inv(3)(q21q26.2)el t(3;3)(q21;q26.2);RPN1-EVI1"
          },
          {
            "code" : "M99113",
            "display" : "AML(megakaryoblastisk)m t(1;22)(p13;q13);RBM15-MLK1"
          },
          {
            "code" : "M98063",
            "display" : "bl. fænotype akut leukæmi m. t(9;22); BCR-ABL1"
          },
          {
            "code" : "M98073",
            "display" : "bl. fænotype akut leukæmi m. t(v;11q); KMT2A rearr."
          },
          {
            "code" : "M98143",
            "display" : "B-lymfobl. leukæmi/lymfom m. t(12;21); ETV6-RUNX1"
          },
          {
            "code" : "M98183",
            "display" : "B-lymfobl. leukæmi/lymfom m. t(1;19); TCF3-PBX1"
          },
          {
            "code" : "M98173",
            "display" : "B-lymfobl. leukæmi/lymfom m. t(5;14); IgH/IL3"
          },
          {
            "code" : "M98153",
            "display" : "B-lymfobl. leukæmi/lymfom med hyperdiploidi"
          }
        ]
      }
    ]
  }
}

```
